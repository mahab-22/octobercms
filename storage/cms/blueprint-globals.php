<?php return array (
  '3328c303-7989-462e-b866-27e7037ba275' => 
  array (
    'uuid' => '3328c303-7989-462e-b866-27e7037ba275',
    'handle' => 'Blog\\Config',
    'type' => 'global',
    'name' => 'Blog Settings',
    'navigation' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-cog',
      'order' => 200,
    ),
    'fields' => 
    array (
      'blog_name' => 
      array (
        'label' => 'Blog Name',
        'tab' => 'General',
        'placeholder' => 'Latest News',
      ),
      'about_this_blog' => 
      array (
        'label' => 'About This Blog',
        'comment' => 'Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.',
        'type' => 'textarea',
        'size' => 'small',
        'tab' => 'General',
      ),
      '_section1' => 
      array (
        'label' => 'Social Links',
        'type' => 'section',
        'tab' => 'General',
      ),
      '_social_links' => 
      array (
        'type' => 'mixin',
        'source' => 'Fields\\SocialLinks',
        'tab' => 'General',
      ),
    ),
    'handleSlug' => 'blog_config',
  ),
);