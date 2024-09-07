<div>
<div class="container">
    <div class="row">
    <div class="col-4">
            <div class="card">
                <div class="card-header">members</div>

                <div class="card-body">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $memberdenganunread; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button wire:click="pilihTujuan(<?php echo e($member['user']->id); ?>)"
                     class="position-relative mb-2 btn btn-sm w-100 <?php echo e($tujuan_id == $member['user']->id ? 'btn-primary' : 'btn-secondary'); ?>">
                        <?php echo e($member['user']->name); ?>


                    <!--[if BLOCK]><![endif]--><?php if($member['unread']): ?>
                        <span 
                            class="position-absolute top-8 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php echo e($member['unread']); ?>

                            <span class="visually-hidden">unread message</span>
                        </span>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </button>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">obrolan</div>

                <div class="card-body">
                    <!--[if BLOCK]><![endif]--><?php if($tujuan_id): ?>
                        <div style="height: 300px; overflow: auto; display: flex; flex-direction: column-reverse; background-color:#fad7a0;" 
                        wire:poll>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $obrolan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if($o->user_id == auth()->id()): ?>
                            <div class="alert alert-success text-end w-75 ms-auto">
                                <b><?php echo e($o->user->name); ?></b>:
                                <br>
                                <?php echo e($o->pesan); ?>

                            </div>
                            <?php else: ?>
                            <div class="alert text-start w-75" style="background-color:#fdfefe ;">
                                <b><?php echo e($o->user->name); ?></b>:
                                <br>
                                <?php echo e($o->pesan); ?>

                            </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <br>
                        <div class="input-group">
                        <input type="text" class="form-control" wire:model='pesan'>
                        <button wire:click="kirimPesan" class="btn btn-primary">kirim</button>
                    </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\laragon\www\chatfeyzadimas\resources\views/livewire/chat.blade.php ENDPATH**/ ?>