/* Из такого условия */
{set $products = 'pdoResources' | snippet:[
  'parents' => 4,
  'tpl' => '',
  'limit' => 0,
  'return' => 'json',
  'includeTVs' => 'image, price',
  'sortby' => 'menuindex',
  'sortdir' => 'ASC'
] | fromJSON}

{foreach $products as $product}
...
{/foreach}

/****** Делаем такое *******/
{set $params = [
    'parents' => 4,
    'tpl' => '',
    'limit' => 0,
    'return' => 'json',
    'includeTVs' => 'image, price',
    'sortby' => 'menuindex',
    'sortdir' => 'ASC'
]}

{if $_modx->resource.related_products}
    {set $params['resources'] = $_modx->resource.related_products}
{/if}

{set $products = 'pdoResources' | snippet:$params | fromJSON}

{foreach $products as $product}
...
{/foreach}
