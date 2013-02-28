<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo h($user['User']['account_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $user['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Last Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_last_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($user['User']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors'), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor'), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendor Reviews'), array('controller' => 'vendor_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor Review'), array('controller' => 'vendor_reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($user['Order'])): ?>
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
		foreach ($user['Order'] as $order): ?>
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
	<h3><?php echo __('Related Vendor Reviews'); ?></h3>
	<?php if (!empty($user['VendorReview'])): ?>
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
		foreach ($user['VendorReview'] as $vendorReview): ?>
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
