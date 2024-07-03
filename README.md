## Imporant Notes From This Project

### Creating the project

```shell
composer require filament/filament:"^3.2" -W
```

```shell
php artisan filament:install --panels
```

## Topics Covered in This Project

-   Multi-tenancy Setup
-   Authentication
-   Relation Manager
-   Tabs/Table/Badge Customization

#### Create an app layout

```shell
php artisan make:filament-panel app
```

### Create a resource

```shell
php artisan make:filament-resource Department --view
```

### Get the tenant of currently logged in user

```php
Filament::getTenant()
```

### Create a stats widget

```shell
php artisan make:filament-widget StatsAppOverview --stats-overview
```

### Create a chart (bar,bubble,etc) widget

```shell
php artisan make:filament-widget EmployeeAdminChart --chart
```

### Create a table widget

```shell
php artisan make:filament-widget LatestAppEmployees --table
```
