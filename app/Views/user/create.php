<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container px-6 mx-auto grid">

    <nav class="flex mt-9" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <?= $this->include('layout/breadcumb'); ?>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Create</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="px-4 py-3 my-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <form action="<?= base_url('user'); ?>" method="post">
            <?= csrf_field(); ?>

            <div class="grid grid-cols-2 gap-4">
                <label class="block text-sm mb-6">
                    <span class="text-gray-700 dark:text-gray-400">Name</span>
                    <?php
                    $errColorName = 'purple';
                    $hiddenName = 'hidden';
                    if ($validation->hasError('name')) {
                        $errColorName = 'red';
                        $hiddenName = '';
                    }
                    ?>
                    <input name="name" value="<?= old('name'); ?>" class="block w-full mt-1 text-sm border-<?= $errColorName; ?>-300 dark:border-gray-600 dark:bg-gray-700 focus:border-<?= $errColorName; ?>-400 focus:outline-none focus:shadow-outline-<?= $errColorName; ?> dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Example : Rudi">
                    <span class="text-xs text-red-600 dark:text-red-400 <?= $hiddenName ?>">
                        <?= $validation->getError('name'); ?>
                    </span>
                </label>
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                    <?php
                    $errColorEmail = 'purple';
                    $hiddenEmail = 'hidden';
                    if ($validation->hasError('email')) {
                        $errColorEmail = 'red';
                        $hiddenEmail = '';
                    }
                    ?>
                    <input name="email" value="<?= old('email'); ?>" class="block w-full mt-1 text-sm border-<?= $errColorEmail; ?>-300 dark:border-gray-600 dark:bg-gray-700 focus:border-<?= $errColorEmail; ?>-400 focus:outline-none focus:shadow-outline-<?= $errColorEmail; ?> dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Example : rudi@gmail.com">
                    <span class="text-xs text-red-600 dark:text-red-400 <?= $hiddenEmail ?>">
                        <?= $validation->getError('email'); ?>
                    </span>
                </label>

            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Password</span>
                    <?php
                    $errColorPassword = 'purple';
                    $hiddenPassword = 'hidden';
                    if ($validation->hasError('email')) {
                        $errColorPassword = 'red';
                        $hiddenPassword = '';
                    }
                    ?>
                    <input name="password" <?= old('password'); ?> type="password" class="block w-full mt-1 text-sm border-<?= $errColorPassword; ?>-300 dark:border-gray-600 dark:bg-gray-700 focus:border-<?= $errColorPassword; ?>-400 focus:outline-none focus:shadow-outline-<?= $errColorPassword; ?> dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Fill with strong password">
                    <span class="text-xs text-red-600 dark:text-red-400 <?= $hiddenPassword ?>">
                        <?= $validation->getError('password'); ?>
                    </span>
                </label>

                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">No. Handphone</span>
                    <input name="no_handphone" value="<?= old('no_handphone'); ?>" class="block w-full mt-1 text-sm border-purple-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Example : 081542601537">
                </label>
            </div>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Role</span>
                <select class="block w-full mt-1 multi-select mt-1 text-sm border-purple-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" name="roles[]" multiple>
                    <?php foreach ($roles as $role) : ?>
                        <option value="<?= $role['id'] ?>"><?= $role['name']; ?></option>
                    <?php endforeach ?>
                </select>
            </label>

            <label class="block mt-4 text-sm mb-6">
                <span class="text-gray-700 dark:text-gray-400">Address</span>
                <textarea name="address" class="block w-full mt-1 text-sm border-purple-300 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Example : Jl. Sejahtera No.1"><?= old('address'); ?></textarea>
            </label>

            <button type="submit" class="w-fit flex items-center px-4 py-1.5 mt-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Submit
            </button>

        </form>
    </div>

</div>
<?= $this->endSection(); ?>