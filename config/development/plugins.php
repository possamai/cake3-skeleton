<?php
/*
 * Use this file to load your development-only plugins
 * The DebugKit plugin should be installed only in development mode
 */
use Cake\Core\Plugin;
Plugin::load('Migrations');
Plugin::load('DebugKit', ['bootstrap' => true]);