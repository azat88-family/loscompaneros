<?php
/* Smarty version 4.5.5, created on 2025-07-05 21:53:43
  from 'C:\xampp\htdocs\loscompaneros\admin\themes\default\template\recomended-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_686982c792fa38_97111906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce4dc9311e64b5ea45ac283cf42b71ba6828298c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loscompaneros\\admin\\themes\\default\\template\\recomended-banner.tpl',
      1 => 1751743119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686982c792fa38_97111906 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="recommendation-wrapper-skeleton" style="display:none">
    <?php echo '<script'; ?>
>
        loadRecommendation();
    <?php echo '</script'; ?>
>
    <div class="col-sm-12">
        <div class="banner panel">
            <div class="row">
                <div class="col-sm-12">
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recommendation-wrapper" style="display:none">
</div><?php }
}
