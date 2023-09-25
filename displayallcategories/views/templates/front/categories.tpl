<div id="category-display">
  {foreach from=$categories item=category}
    <div class="category-item">
      <h2>{$category.name}</h2>
      <img src="{$module_dir}img/{$category.id}.jpg" alt="{$category.name}">
    </div>
  {/foreach}
</div>