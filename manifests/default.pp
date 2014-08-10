Exec { path => [ "/bin/", "/sbin/" , "/usr/bin/", "/usr/sbin/" ] }

class apache {

  package { "apache2":
    ensure  => present,
    require => Class["system-update"],
  }

  service { "apache2":
    ensure  => "running",
    require => Package["apache2"],
  }

  file { '/var/www/html':
     ensure => 'link',
     target => '/vagrant',
     force => true,
  }

}

class system-update {

  exec { 'apt-get update':
    command => 'apt-get update --yes',
    notify => Exec['apt-get autoremove']
  }

  exec { 'apt-get autoremove':
    command => 'apt-get autoremove --yes',
  }

  $sysPackages = [ "build-essential", "php5", "libapache2-mod-php5" ]
  package { $sysPackages:
    ensure => "installed",
    require => Exec['apt-get update'],
  }
}

include apache
include system-update
