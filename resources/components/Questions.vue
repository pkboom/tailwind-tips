<template>
    <div>
        <div v-for="(question, index) in questions" :key="index">
            <question :question="question"></question> 
        </div>
    </div>
</template>

<script>
    export default {
        props: ['questions'],
    }
</script>

<style>
    
</style>