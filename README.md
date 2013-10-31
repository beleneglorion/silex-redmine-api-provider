## RedmineServiceProvider

Provider to use [Redmine Api](https://github.com/kbsali/php-redmine-api) with [Silex](https://github.com/fabpot/Silex)


#### Install

You have to add to your composer.json file:

```
"beleneglorion/silex-redmine-api-provider": "dev-master"
```


#### Registering

```
$app->register(new Hinatachii\Silex\Provider\RedmineServiceProvider());
```

#### Configuration

You need to set the configuration for the  api :

```
$app['redmine.options'] = array(
    'url'     => "http://redmine.example.org",
    'apikey'   => "123456789abcdef"
);
```

#### Use in controllers

    $app->get('/index', function (Request $request) use ($app) {

        $projects = $app['redmine']->api('project')->all();
        $issue = $app['redmine']->api('issue')->show($issueId);
        $issues = $app['redmine']->api('issue')->all();
    })
