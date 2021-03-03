<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'trainsignalapp/backchannel');

// Project repository
set('repository', 'git+ssh://git@github.com/trainsignalapp/backchannel.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', ['storage']);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('atl14.userlabs.net')
    ->user('deploy')
    ->set('deploy_path', '/srv/webapps/{{application}}');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
    run('cd {{release_path}} && composer install');
    run('cd {{release_path}} && npm run prod');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

