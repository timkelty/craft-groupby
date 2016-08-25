<?php

namespace Craft;

class GroupByPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Group By');
    }

    public function getVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'Tim Kelty';
    }

    public function getDeveloperUrl()
    {
        return 'http://fusionary.com/';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.groupby.twigextensions.GroupByTwigExtension');

        return new GroupByTwigExtension();
    }
}



