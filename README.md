# Getting started with Lo-module-origami

### 1. Установка

```bash
  "repositories": [
    {
      "type": "vcs",
      "url": "http://loveorigami@bitbucket.org/loveorigami/lo-module-origami.git"
    }
  ],
  "minimum-stability": "dev",
  "require": {
       "loveorigami/lo-module-origami": "*"
  }
```

### 2. Update database schema

```bash
$ php yii migrate/up --migrationPath=@vendor/loveorigami/lo-module-geo/migrations
```

### 3. Create database schema
```bash
$ php yii migrate/create --migrationPath=@vendor/loveorigami/lo-module-geo/migrations "geo_country"

```