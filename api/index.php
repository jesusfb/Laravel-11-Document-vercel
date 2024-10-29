{
    "version": 2,
      "framework": null,
    "functions": {
        "api/index.php": { 
            "runtime": "vercel-php@0.6.2" 
        }
    },
    "routes": [{
        "src": "/(.*)",
        "dest": "/api/index.php"
    }],
    "env": {
        "APP_ENV": "production",
        "APP_DEBUG": "true",
        "APP_URL": "https://yourprojectdomain.com",
        "APP_KEY": "base64:bIjJleRgIF72siIp3ntzSimEfMpT7AOVtLcw1vAQhOc=",

        "APP_CONFIG_CACHE": "/tmp/config.php",
        "APP_EVENTS_CACHE": "/tmp/events.php",
        "APP_PACKAGES_CACHE": "/tmp/packages.php",
        "APP_ROUTES_CACHE": "/tmp/routes.php",
        "APP_SERVICES_CACHE": "/tmp/services.php",
        "VIEW_COMPILED_PATH": "/tmp",

        "CACHE_DRIVER": "array",
        "LOG_CHANNEL": "stderr",
        "SESSION_DRIVER": "cookie"
    }
}
