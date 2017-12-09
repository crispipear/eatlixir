<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<section class="foodDir">
<?php if ($currentRole === 'admin'): ?>
  <h3 class="formTitle">Admin Control Panel</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="10%" scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th width="15%" scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valid_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fail_count') ?></th>
                <th width="10%" scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th width="10%"scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td width="10%"><?= h($user->username) ?></td>
                <td><?= h($user->name) ?></td>
                <td width="15%"><?= h($user->email) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->valid_state) ?></td>
                <td><?= h($user->last_login) ?></td>
                <td><?= $this->Number->format($user->fail_count) ?></td>
                <td width="10%"><?= h($user->created) ?></td>
                <td width="10%"><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination left">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p class="right"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
<?php endif; ?>
<?php if ($currentRole === 'user'): ?>
  <h3>You are not authorized to view this page</h3>
<?php endif; ?>
</section>
