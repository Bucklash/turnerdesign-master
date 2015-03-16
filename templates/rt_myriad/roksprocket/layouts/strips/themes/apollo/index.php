<?php
/**
* @version   $Id: index.php 26134 2015-01-27 15:46:05Z james $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $layout     RokSprocket_Layout_Strips
 * @var $items      RokSprocket_Item[]
 * @var $parameters RokCommon_Registry
 * @var $pages      int
 */

?>
<div class="sprocket-strips sprocket-strips-apollo" data-strips="<?php echo $parameters->get('module_id'); ?>">
	<div class="sprocket-strips-apollo-overlay"><div class="css-loader-wrapper"><div class="css-loader"></div></div></div>
	<div class="sprocket-strips-apollo-container cols-<?php echo $parameters->get('strips_items_per_row'); ?>" data-strips-items>
		<?php
			$index = 0;
			foreach ($items as $item){
				echo $layout->getThemeContext()->load('item.php', array('item'=> $item,'parameters'=>$parameters,'index'=>$index));
				$index++;
			}
		?>
	</div>
	<div class="sprocket-strips-apollo-nav">
		<div class="sprocket-strips-apollo-pagination<?php echo !$parameters->get('strips_show_pagination') || $pages <= 1 ? '-hidden' : '';?>">
			<ul>
			<?php for ($i = 1, $l = $pages;$i <= $pages;$i++): ?>
				<?php
					$class = ($i == 1) ? ' class="active"' : '';
				?>
		    	<li<?php echo $class; ?> data-strips-page="<?php echo $i; ?>"><span><?php echo $i; ?></span></li>
			<?php endfor; ?>
			</ul>
		</div>
		<?php if ($parameters->get('strips_show_arrows')!='hide' && $pages > 1) : ?>
		<div class="sprocket-strips-apollo-arrows">
			<span class="arrow next" data-strips-next></span>
			<span class="arrow prev" data-strips-previous></span>
		</div>
		<?php endif; ?>
	</div>
</div>