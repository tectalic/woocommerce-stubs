<?php

return \StubsGenerator\Finder::create()
    ->in(['woocommerce/packages/*/src'])
    // Action Scheduler.
    ->append(
        \StubsGenerator\Finder::create()
            ->in([
                'woocommerce/packages/action-scheduler/classes',
                // Current classes extend deprecated ones.
                'woocommerce/packages/action-scheduler/deprecated',
            ])
            // Uses WP-CLI.
            ->notPath('WP_CLI')
            ->sortByName(true)
    )
    ->append(
        \StubsGenerator\Finder::create()
            ->in(['woocommerce/packages/action-scheduler'])
            ->files()
            ->depth('< 1')
            ->path('functions.php')
    )
    ->sortByName(true);
