<?php return array (
  '6947ff28-b660-47d7-9240-24ca6d58aeae' => 
  array (
    'uuid' => '6947ff28-b660-47d7-9240-24ca6d58aeae',
    'handle' => 'Blog\\Author',
    'type' => 'entry',
    'name' => 'Author',
    'drafts' => false,
    'navigation' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-user',
      'order' => 200,
    ),
    'fields' => 
    array (
      'avatar' => 
      array (
        'label' => 'Avatar',
        'type' => 'mediafinder',
        'mode' => 'image',
      ),
      'role' => 
      array (
        'label' => 'Role',
        'type' => 'text',
      ),
      'about' => 
      array (
        'label' => 'About',
        'type' => 'textarea',
      ),
      '_social_links' => 
      array (
        'type' => 'mixin',
        'label' => 'Social Links',
        'source' => 'Fields\\SocialLinks',
        'tab' => 'Social',
      ),
    ),
    'handleSlug' => 'blog_author',
  ),
  'edcd102e-0525-4e4d-b07e-633ae6c18db6' => 
  array (
    'uuid' => 'edcd102e-0525-4e4d-b07e-633ae6c18db6',
    'handle' => 'Blog\\Post',
    'type' => 'stream',
    'name' => 'Post',
    'drafts' => true,
    'primaryNavigation' => 
    array (
      'label' => 'Blog',
      'icon' => 'octo-icon-file',
      'iconSvg' => 'modules/tailor/assets/images/blog-icon.svg',
      'order' => 95,
    ),
    'navigation' => 
    array (
      'icon' => 'octo-icon-pencil',
      'order' => 100,
    ),
    'groups' => 
    array (
      'regular_post' => 
      array (
        'name' => 'Regular Post',
        'fields' => 
        array (
          'content' => 
          array (
            'tab' => 'Edit',
            'label' => 'Content',
            'type' => 'richeditor',
            'span' => 'adaptive',
          ),
          '_blog_post_content' => 
          array (
            'type' => 'mixin',
            'source' => 'Blog\\PostContent',
          ),
        ),
      ),
      'markdown_post' => 
      array (
        'name' => 'Markdown Post',
        'fields' => 
        array (
          'content' => 
          array (
            'tab' => 'Edit',
            'label' => 'Content',
            'type' => 'markdown',
            'span' => 'adaptive',
          ),
          '_blog_post_content' => 
          array (
            'type' => 'mixin',
            'source' => 'Blog\\PostContent',
          ),
        ),
      ),
    ),
    'handleSlug' => 'blog_post',
  ),
  'b022a74b-15e6-4c6b-9eb9-17efc5103543' => 
  array (
    'uuid' => 'b022a74b-15e6-4c6b-9eb9-17efc5103543',
    'type' => 'structure',
    'handle' => 'Blog\\Category',
    'name' => 'Category',
    'drafts' => false,
    'structure' => 
    array (
      'maxDepth' => 1,
    ),
    'navigation' => 
    array (
      'parent' => 'Blog\\Post',
      'icon' => 'octo-icon-list-ul',
      'order' => 150,
    ),
    'fields' => 
    array (
      'description' => 
      array (
        'label' => 'Description',
      ),
    ),
    'handleSlug' => 'blog_category',
  ),
  '6743a1c3-3e57-4cfa-a886-e0c0a277fd71' => 
  array (
    'uuid' => '6743a1c3-3e57-4cfa-a886-e0c0a277fd71',
    'handle' => 'Site\\Sitemap',
    'type' => 'structure',
    'name' => 'Sitemap',
    'drafts' => false,
    'pagefinder' => false,
    'structure' => 
    array (
      'maxDepth' => 1,
    ),
    'navigation' => 
    array (
      'parent' => 'settings',
      'icon' => 'icon-sitemap',
      'description' => 'Specify pages to appear in the sitemap for your website.',
      'category' => 'CATEGORY_CMS',
    ),
    'fields' => 
    array (
      'reference' => 
      array (
        'label' => 'Reference',
        'type' => 'pagefinder',
      ),
      'priority' => 
      array (
        'label' => 'Priority',
        'commentAbove' => 'The priority of this URL relative to other URLs on your site.',
        'type' => 'radio',
        'inlineOptions' => true,
        'options' => 
        array (
          '0.1' => '0.1',
          '0.2' => '0.2',
          '0.3' => '0.3',
          '0.4' => '0.4',
          '0.5' => '0.5',
          '0.6' => '0.6',
          '0.7' => '0.7',
          '0.8' => '0.8',
          '0.9' => '0.9',
          '1.0' => '1.0',
        ),
      ),
      'changefreq' => 
      array (
        'commentAbove' => 'How frequently the page is likely to change.',
        'label' => 'Change Frequency',
        'type' => 'radio',
        'inlineOptions' => true,
        'options' => 
        array (
          'always' => 'Always',
          'hourly' => 'Hourly',
          'daily' => 'Daily',
          'weekly' => 'Weekly',
          'monthly' => 'Monthly',
          'yearly' => 'Yearly',
          'never' => 'Never',
        ),
      ),
      'nesting' => 
      array (
        'label' => 'Include nested items',
        'shortLabel' => 'Nesting',
        'comment' => 'Nested items could be generated dynamically by supported page references.',
        'type' => 'checkbox',
      ),
      'replace' => 
      array (
        'label' => 'Replace this item with its generated children',
        'comment' => 'Use this checkbox to push generated menu items to the same level with this item. This item itself will be hidden.',
        'type' => 'checkbox',
        'column' => false,
        'scope' => false,
        'trigger' => 
        array (
          'action' => 'disable|empty',
          'field' => 'nesting',
          'condition' => 'unchecked',
        ),
      ),
    ),
    'handleSlug' => 'site_sitemap',
  ),
  'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1' => 
  array (
    'uuid' => 'a63fabaf-7c0b-4c74-b36f-7abf1a3ad1c1',
    'handle' => 'LandingPage',
    'type' => 'single',
    'name' => 'Landing Page',
    'drafts' => true,
    'navigation' => 
    array (
      'icon' => 'icon-rocket',
    ),
    'fields' => 
    array (
      'block_builder' => 
      array (
        'type' => 'mixin',
        'source' => 'BlockBuilder',
      ),
    ),
    'handleSlug' => 'landing_page',
  ),
  '339b11b7-69ad-43c4-9be1-6953e7738827' => 
  array (
    'uuid' => '339b11b7-69ad-43c4-9be1-6953e7738827',
    'handle' => 'Wiki\\Article',
    'type' => 'structure',
    'name' => 'Article',
    'drafts' => true,
    'structure' => 
    array (
      'maxDepth' => 3,
    ),
    'navigation' => 
    array (
      'icon' => 'icon-wikipedia-w',
    ),
    'fields' => 
    array (
      'content' => 
      array (
        'label' => 'Content',
        'tab' => 'Edit',
        'type' => 'richeditor',
        'span' => 'adaptive',
      ),
      'banner' => 
      array (
        'label' => 'Banner',
        'type' => 'fileupload',
        'mode' => 'image',
        'maxFiles' => 1,
      ),
      'show_in_toc' => 
      array (
        'label' => 'Show in TOC',
        'comment' => 'Include this article in the table of contents',
        'type' => 'checkbox',
      ),
      'summary_text' => 
      array (
        'label' => 'Summary Text',
        'type' => 'textarea',
        'size' => 'small',
      ),
      'gallery' => 
      array (
        'label' => 'Gallery',
        'type' => 'fileupload',
        'mode' => 'image',
      ),
      'external_links' => 
      array (
        'label' => 'External Links',
        'tab' => 'Links',
        'type' => 'repeater',
        'form' => 
        array (
          'fields' => 
          array (
            'link_text' => 
            array (
              'label' => 'Link Text',
              'span' => 'auto',
            ),
            'link_url' => 
            array (
              'label' => 'Link URL',
              'span' => 'auto',
            ),
          ),
        ),
      ),
    ),
    'handleSlug' => 'wiki_article',
  ),
);