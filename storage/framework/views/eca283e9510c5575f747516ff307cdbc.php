<?php $__env->startSection('title', trans('backend.titles.donations')); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/backend/css/datepicker.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="card card-custom example example-compact">
                    <?php echo $__env->make('backend.includes.form.header', ['page' => 'donations'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e($edit === false ?  route('backend.donations.store') : route('backend.donations.update', ['donation' => $donation->id])); ?>"
                          method="POST"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if($edit): ?>
                            <?php echo method_field('PUT'); ?>
                        <?php endif; ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <ul class="nav nav-light-primary nav-pills" role="tablist">
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?>" id="tab-<?php echo e($lang->code); ?>"
                                                   data-toggle="tab" href="#<?php echo e($lang->code); ?>">
                                                    <span class="nav-text"><?php echo e($lang->name); ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($loop->first): ?> active show <?php endif; ?>" id="<?php echo e($lang->code); ?>"
                                         role="tabpanel" aria-labelledby="tab-<?php echo e($lang->code); ?>">
                                        <div class="form-group row">
                                            <label for="title:<?php echo e($lang->code); ?>" class="col-form-label text-right col-lg-3 col-sm-12">
                                                <?php echo app('translator')->get('backend.labels.title'); ?> (<?php echo e(strtoupper($lang->code)); ?>)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="title:<?php echo e($lang->code); ?>" type="text"
                                                           class="form-control <?php if($errors->has("title:$lang->code")): ?> is-invalid <?php endif; ?>"
                                                           name="title:<?php echo e($lang->code); ?>"
                                                           value="<?php echo e(isset($donation) ? $donation->translate($lang->code)?->title : old('title:'.$lang->code)); ?>"
                                                           placeholder="<?php echo app('translator')->get('backend.labels.title'); ?>">
                                                    <?php if($errors->has("title:$lang->code")): ?>
                                                        <div class="invalid-feedback"><?php echo e($errors->first("name:$lang->code")); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="content:<?php echo e($lang->code); ?>" class="col-form-label text-right col-lg-3 col-sm-12">
                                                <?php echo app('translator')->get('backend.labels.content'); ?> (<?php echo e(strtoupper($lang->code)); ?>)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="content:<?php echo e($lang->code); ?>" type="text"
                                                           class="form-control <?php if($errors->has("text:$lang->code")): ?> is-invalid <?php endif; ?>"
                                                           name="content:<?php echo e($lang->code); ?>"
                                                           value="<?php echo e(isset($donation) ? $donation->translate($lang->code)?->content : old('content:'.$lang->code)); ?>"
                                                           placeholder="<?php echo app('translator')->get('backend.labels.content'); ?>">
                                                    <?php if($errors->has("content:$lang->code")): ?>
                                                        <div class="invalid-feedback"><?php echo e($errors->first("content:$lang->code")); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description:<?php echo e($lang->code); ?>" class="col-form-label text-right col-lg-3 col-sm-12">
                                                <?php echo app('translator')->get('backend.labels.description'); ?> (<?php echo e(strtoupper($lang->code)); ?>)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="description:<?php echo e($lang->code); ?>" type="text"
                                                           class="form-control <?php if($errors->has("description:$lang->code")): ?> is-invalid <?php endif; ?>"
                                                           name="description:<?php echo e($lang->code); ?>"
                                                           value="<?php echo e(isset($donation) ? $donation->translate($lang->code)?->description : old('description:'.$lang->code)); ?>"
                                                           placeholder="<?php echo app('translator')->get('backend.labels.description'); ?>">
                                                    <?php if($errors->has("description:$lang->code")): ?>
                                                        <div class="invalid-feedback"><?php echo e($errors->first("description:$lang->code")); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="slug:<?php echo e($lang->code); ?>" class="col-form-label text-right col-lg-3 col-sm-12">
                                                <?php echo app('translator')->get('backend.labels.slug'); ?> (<?php echo e(strtoupper($lang->code)); ?>)
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="slug:<?php echo e($lang->code); ?>" type="text"
                                                           class="form-control <?php if($errors->has("slug:$lang->code")): ?> is-invalid <?php endif; ?>"
                                                           name="slug:<?php echo e($lang->code); ?>"
                                                           value="<?php echo e(isset($donation) ? $donation->translate($lang->code)?->slug : old('slug:'.$lang->code)); ?>"
                                                           placeholder="<?php echo app('translator')->get('backend.labels.slug'); ?>">
                                                    <?php if($errors->has("slug:$lang->code")): ?>
                                                        <div class="invalid-feedback"><?php echo e($errors->first("slug:$lang->code")); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    <?php echo app('translator')->get('backend.labels.image'); ?>
                                    <?php if(!$edit): ?>
                                        <span class="text-danger">*</span>
                                    <?php endif; ?>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image[]" multiple="multiple" accept="image/*">
                                            <label class="custom-file-label">
                                                <?php echo app('translator')->get('backend.placeholders.choose.image'); ?>
                                            </label>
                                        </div>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback d-block"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="order" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Sıra
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="order" type="number" class="form-control <?php if($errors->has("order")): ?> is-invalid <?php endif; ?>" name="order"
                                               value="<?php echo e(isset($donation) ? $donation->order : old('order')); ?>">
                                        <?php if($errors->has("order")): ?>
                                            <div class="invalid-feedback"><?php echo e($errors->first("order")); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php echo $__env->make('backend.includes.form.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?php if($edit): ?>
                            <?php echo $__env->make('backend.includes.media',[
                                    'model' => $donation,
                                    'name'  => 'donation',
                                    'media_collection_name'  => 'donations',
                                    'isDeleted' => true,
                                    'isCovered' => false,
                                     ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek\resources\views/backend/donations/form.blade.php ENDPATH**/ ?>