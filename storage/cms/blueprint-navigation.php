<?php return array (
  0 => 
  array (
    'edcd102e-0525-4e4d-b07e-633ae6c18db6' => 
    array (
      'label' => 'Blog',
      'icon' => 'octo-icon-file',
      'iconSvg' => 'modules/tailor/assets/images/blog-icon.svg',
      'order' => 95,
      'uuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
      'handle' => 'Blog\\Post',
      'hasPrimary' => true,
      'code' => 'entry_blog_post',
      'url' => 'tailor/entries/blog_post',
      'mode' => 'content',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.entry.edcd102e05254e4db07e633ae6c18db6',
        1 => 'tailor.entry.6947ff28b66047d7924024ca6d58aeae',
        2 => 'tailor.entry.b022a74b15e64c6b9eb917efc5103543',
        3 => 'tailor.global.3328c3037989462eb86627e7037ba275',
      ),
    ),
  ),
  1 => 
  array (
    '6947ff28-b660-47d7-9240-24ca6d58aeae' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-user',
      'order' => 200,
      'uuid' => '6947ff28-b660-47d7-9240-24ca6d58aeae',
      'handle' => 'Blog\\Author',
      'hasPrimary' => false,
      'code' => 'entry_blog_author',
      'url' => 'tailor/entries/blog_author',
      'mode' => 'content',
      'label' => 'Author',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.entry.6947ff28b66047d7924024ca6d58aeae',
      ),
      'parentCode' => 'entry_blog_post',
    ),
    'edcd102e-0525-4e4d-b07e-633ae6c18db6' => 
    array (
      'icon' => 'octo-icon-pencil',
      'order' => 100,
      'uuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
      'handle' => 'Blog\\Post',
      'hasPrimary' => true,
      'code' => 'entry_blog_post',
      'url' => 'tailor/entries/blog_post',
      'mode' => 'content',
      'label' => 'Post',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.entry.edcd102e05254e4db07e633ae6c18db6',
      ),
    ),
    'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-list-ul',
      'order' => 150,
      'uuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
      'handle' => 'Blog\\Category',
      'hasPrimary' => false,
      'code' => 'entry_blog_category',
      'url' => 'tailor/entries/blog_category',
      'mode' => 'content',
      'label' => 'Category',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.entry.b022a74b15e64c6b9eb917efc5103543',
      ),
      'parentCode' => 'entry_blog_post',
    ),
    '6743a1c3-3e57-4cfa-a886-e0c0a277fd71' => 
    array (
      'parent' => 'settings',
      'icon' => 'icon-sitemap',
      'description' => 'Specify pages to appear in the sitemap for your website.',
      'category' => 'CATEGORY_CMS',
      'uuid' => '6743a1c3-3e57-4cfa-a886-e0c0a277fd71',
      'handle' => 'Site\\Sitemap',
      'hasPrimary' => false,
      'code' => 'entry_site_sitemap',
      'url' => 'tailor/entries/site_sitemap',
      'mode' => 'content',
      'label' => 'Sitemap',
      'permissionCode' => 
      array (
        0 => 'tailor.entry.6743a1c33e574cfaa886e0c0a277fd71',
      ),
    ),
    'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1' => 
    array (
      'icon' => 'icon-rocket',
      'uuid' => 'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1',
      'handle' => 'LandingPage',
      'hasPrimary' => false,
      'code' => 'entry_landing_page',
      'url' => 'tailor/entries/landing_page',
      'mode' => 'content',
      'label' => 'Landing Page',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.entry.a63fabaf7c0b4c74b36f7abf1a3ad1c1',
      ),
    ),
    '339b11b7-69ad-43c4-9be1-6953e7738827' => 
    array (
      'icon' => 'icon-wikipedia-w',
      'uuid' => '339b11b7-69ad-43c4-9be1-6953e7738827',
      'handle' => 'Wiki\\Article',
      'hasPrimary' => false,
      'code' => 'entry_wiki_article',
      'url' => 'tailor/entries/wiki_article',
      'mode' => 'content',
      'label' => 'Article',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.entry.339b11b769ad43c49be16953e7738827',
      ),
    ),
    '3328c303-7989-462e-b866-27e7037ba275' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-cog',
      'order' => 200,
      'uuid' => '3328c303-7989-462e-b866-27e7037ba275',
      'handle' => 'Blog\\Config',
      'hasPrimary' => false,
      'code' => 'global_blog_config',
      'url' => 'tailor/globals/blog_config',
      'mode' => 'settings',
      'category' => 'Globals',
      'label' => 'Blog Settings',
      'description' => NULL,
      'permissionCode' => 
      array (
        0 => 'tailor.global.3328c3037989462eb86627e7037ba275',
      ),
      'parentCode' => 'entry_blog_post',
    ),
  ),
);