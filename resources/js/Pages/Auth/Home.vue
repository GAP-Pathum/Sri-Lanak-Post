<template>
  <div class="bg-white p-10 rounded-lg shadow-lg text-center">
      <h1 class="text-2xl font-bold">Welcome, {{ user.username }}!</h1>
      <p class="mt-4 text-gray-600">You are successfully logged in to SLPost.</p>
      <button @click="logout" class="mt-6 px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
          Logout
      </button>
  </div>
</template>

<script>
export default {
  data() {
      return {
          user: {
              username: 'User' // Replace with actual username logic
          }
      };
  },
  methods: {
      logout() {
          // Logic to handle logout
      }
  }
};
</script>

<style scoped>
/* Add any component-specific styles here */
</style>
