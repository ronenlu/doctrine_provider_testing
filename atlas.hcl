data "external_schema" "doctrine" {
  program = [
    "php",
    "atlas.php",
  ]
}

env "doctrine" {
  src = data.external_schema.doctrine.url
  dev = "docker://mysql/8/dev"
  migration {
    dir = "file://migrations"
  }
  format {
    migrate {
      diff = "{{ sql . \"  \" }}"
    }
  }
}