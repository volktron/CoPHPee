<?php declare(strict_types=1);

return [
    'default' => 'test_database',

    'connections' => [
        // MySQL example config
        [
            'name' => 'test_database_mysql',
            'type' => 'mysql',
            'host' => 'localhost',
            'schema' => 'information_schema',

            // Please use proper credentials in your project, this is just an example config!
            'username' => 'root',
            'password' => 'root'
        ],

        // Postgres (PostgreSQL) example config
        [
            'name' => 'test_database_postgres',
            'type' => 'postgres', // 'pgsql' is also valid
            'host' => 'localhost',
            'schema' => 'information_schema',

            // Please use proper credentials in your project, this is just an example config!
            'username' => 'root',
            'password' => 'root'
        ],

        // SQLite example config
        [
            'name' => 'test_database_sqlite',
            'type' => 'sqlite',
            'path' => 'localhost',
        ],

        // SQL Server example config
        [
            'name' => 'test_database_sqlsrv',
            'type' => 'sqlsrv', // 'mssql' is also valid
            'host' => 'localhost',
            'schema' => 'information_schema',

            // Please use proper credentials in your project, this is just an example config!
            'username' => 'root',
            'password' => 'root'
        ],
    ],
];
