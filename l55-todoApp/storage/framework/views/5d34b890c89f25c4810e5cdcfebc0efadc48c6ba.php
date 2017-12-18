<!-- /resources/views/projects/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <h2>Projects</h2>

    <?php if( !$projects->count() ): ?>
        You have no projects
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))); ?>

                        <a href="<?php echo e(route('projects.show', $project->slug)); ?>"><?php echo e($project->name); ?></a>
                        (
                            <?php echo link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')); ?>,
                            <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>

                        )
                    <?php echo Form::close(); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <p>
        <?php echo link_to_route('projects.create', 'Create Project'); ?>

    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>