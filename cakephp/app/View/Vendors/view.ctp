<div class="vendors view">
<h2><?php  echo __('Vendor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture Url'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['picture_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Last Modified'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['date_last_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($vendor['Vendor']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendor'), array('action' => 'edit', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vendor'), array('action' => 'delete', $vendor['Vendor']['id']), null, __('Are you sure you want to delete # %s?', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Schedules'), array('controller' => 'operation_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Schedule'), array('controller' => 'operation_schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menu Items'), array('controller' => 'menu_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Special Offers'), array('controller' => 'special_offers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Special Offer'), array('controller' => 'special_offers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendor Reviews'), array('controller' => 'vendor_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor Review'), array('controller' => 'vendor_reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Operation Schedules'); ?></h3>
	<?php if (!empty($vendor['OperationSchedule'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Vendor Id'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['vendor_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Monday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['monday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Monday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['monday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tuesday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['tuesday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tuesday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['tuesday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Wednesday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['wednesday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Wednesday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['wednesday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Thursday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['thursday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Thursday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['thursday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Friday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['friday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Friday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['friday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Saturday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['saturday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Saturday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['saturday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sunday Open'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['sunday_open']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sunday Close'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['sunday_close']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['date_created']; ?>
&nbsp;</dd>
		<dt><?php echo __('Date Last Modified'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['date_last_modified']; ?>
&nbsp;</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
	<?php echo $vendor['OperationSchedule']['deleted']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Operation Schedule'), array('controller' => 'operation_schedules', 'action' => 'edit', $vendor['OperationSchedule']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Menu Items'); ?></h3>
	<?php if (!empty($vendor['MenuItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Available'); ?></th>
		<th><?php echo __('Picture Url'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Last Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['MenuItem'] as $menuItem): ?>
		<tr>
			<td><?php echo $menuItem['id']; ?></td>
			<td><?php echo $menuItem['name']; ?></td>
			<td><?php echo $menuItem['category']; ?></td>
			<td><?php echo $menuItem['price']; ?></td>
			<td><?php echo $menuItem['description']; ?></td>
			<td><?php echo $menuItem['available']; ?></td>
			<td><?php echo $menuItem['picture_url']; ?></td>
			<td><?php echo $menuItem['vendor_id']; ?></td>
			<td><?php echo $menuItem['date_created']; ?></td>
			<td><?php echo $menuItem['date_last_modified']; ?></td>
			<td><?php echo $menuItem['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'menu_items', 'action' => 'view', $menuItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'menu_items', 'action' => 'edit', $menuItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'menu_items', 'action' => 'delete', $menuItem['id']), null, __('Are you sure you want to delete # %s?', $menuItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($vendor['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Wait Time'); ?></th>
		<th><?php echo __('Payment Method'); ?></th>
		<th><?php echo __('Tax'); ?></th>
		<th><?php echo __('Discount'); ?></th>
		<th><?php echo __('Total Price'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['wait_time']; ?></td>
			<td><?php echo $order['payment_method']; ?></td>
			<td><?php echo $order['tax']; ?></td>
			<td><?php echo $order['discount']; ?></td>
			<td><?php echo $order['total_price']; ?></td>
			<td><?php echo $order['vendor_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Special Offers'); ?></h3>
	<?php if (!empty($vendor['SpecialOffer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Promo Period Start'); ?></th>
		<th><?php echo __('Promo Period End'); ?></th>
		<th><?php echo __('Discount Amount'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Last Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['SpecialOffer'] as $specialOffer): ?>
		<tr>
			<td><?php echo $specialOffer['id']; ?></td>
			<td><?php echo $specialOffer['description']; ?></td>
			<td><?php echo $specialOffer['promo_period_start']; ?></td>
			<td><?php echo $specialOffer['promo_period_end']; ?></td>
			<td><?php echo $specialOffer['discount_amount']; ?></td>
			<td><?php echo $specialOffer['vendor_id']; ?></td>
			<td><?php echo $specialOffer['date_created']; ?></td>
			<td><?php echo $specialOffer['date_last_modified']; ?></td>
			<td><?php echo $specialOffer['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'special_offers', 'action' => 'view', $specialOffer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'special_offers', 'action' => 'edit', $specialOffer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'special_offers', 'action' => 'delete', $specialOffer['id']), null, __('Are you sure you want to delete # %s?', $specialOffer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Special Offer'), array('controller' => 'special_offers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($vendor['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Account Type'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Date Last Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['phone_number']; ?></td>
			<td><?php echo $user['account_type']; ?></td>
			<td><?php echo $user['vendor_id']; ?></td>
			<td><?php echo $user['date_created']; ?></td>
			<td><?php echo $user['date_last_modified']; ?></td>
			<td><?php echo $user['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vendor Reviews'); ?></h3>
	<?php if (!empty($vendor['VendorReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['VendorReview'] as $vendorReview): ?>
		<tr>
			<td><?php echo $vendorReview['id']; ?></td>
			<td><?php echo $vendorReview['user_id']; ?></td>
			<td><?php echo $vendorReview['title']; ?></td>
			<td><?php echo $vendorReview['description']; ?></td>
			<td><?php echo $vendorReview['rating']; ?></td>
			<td><?php echo $vendorReview['date_created']; ?></td>
			<td><?php echo $vendorReview['vendor_id']; ?></td>
			<td><?php echo $vendorReview['deleted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vendor_reviews', 'action' => 'view', $vendorReview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vendor_reviews', 'action' => 'edit', $vendorReview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vendor_reviews', 'action' => 'delete', $vendorReview['id']), null, __('Are you sure you want to delete # %s?', $vendorReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vendor Review'), array('controller' => 'vendor_reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
