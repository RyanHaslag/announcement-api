<template>
    <div class="bg-white p-6 shadow-lg rounded-lg m-2">
        <div>
            <h3 class="text-2xl font-bold text-gray-600">
                <slot name="heading"></slot>
            </h3>
        </div>
        <div class="mb-4 flex justify-between items-center">
            <div class="flex items-center">
                <h5 class="text-sm text-gray-500">
                    <slot name="author"></slot>
                </h5>
            </div>
        </div>
        <div class="text-base text-gray-700 leading-relaxed">
            <slot name="body"></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        body: String,
    },
};
</script>

<style>
a {
    color: darkblue;
    text-decoration: underline;
}
</style>
