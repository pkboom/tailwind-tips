<template>
  <transition
    enter-active-class="transition duration-1000 ease-out"
    enter-class="transform scale-50 opacity-0 translate-x-10"
    enter-to-class="transform scale-100 opacity-100"
    leave-active-class="transition duration-1000 ease-out"
    leave-class="transform scale-100 opacity-100"
    leave-to-class="transform scale-50 opacity-0 translate-x-10"
  >
    <div v-if="open" class="rounded bg-red-300 p-8 shadow-lg w-40">
      <slot></slot>
    </div>
  </transition>
</template>

<script>
export default {
  props: {
    open: Boolean,
  },
};
</script>
