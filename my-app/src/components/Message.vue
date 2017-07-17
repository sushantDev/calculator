<template>
    <div class="box">
        <p>
            <slot></slot>
        </p>
    </div>
</template>


<script>
    export default {

    }
</script>


<style>
    .box{
        background: grey;
        padding: 2em;
        border: 1px solid darkgray;
        margin-bottom: 2em;
    }

</style>