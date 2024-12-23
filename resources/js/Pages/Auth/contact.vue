<template>
  <div class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-4 shadow-md">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Sri Lanka Postal Service</h1>
        <nav class="flex space-x-4">
          <router-link to="/" class="hover:underline">Home</router-link>
          <router-link to="/contact" class="hover:underline">Contact</router-link>
        </nav>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-12 p-4">
      <h2 class="text-4xl font-semibold text-center text-blue-700 mb-6">Get in Touch</h2>
      <p class="text-center text-gray-600 mb-8">
        We’re here to help. Please fill out the form below and we’ll get back to you soon.
      </p>

      <!-- Contact Form -->
      <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <form @submit.prevent="handleSubmit">
          <!-- Name Field -->
          <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input
              v-model="form.name"
              type="text"
              id="name"
              placeholder="Enter your full name"
              class="mt-2 w-full p-3 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            />
            <span v-if="errors.name" class="text-red-500 text-sm">{{ errors.name }}</span>
          </div>

          <!-- Email Field -->
          <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input
              v-model="form.email"
              type="email"
              id="email"
              placeholder="Enter your email"
              class="mt-2 w-full p-3 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            />
            <span v-if="errors.email" class="text-red-500 text-sm">{{ errors.email }}</span>
          </div>

          <!-- Message Field -->
          <div class="mb-6">
            <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
            <textarea
              v-model="form.message"
              id="message"
              rows="4"
              placeholder="Write your message here..."
              class="mt-2 w-full p-3 border rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            ></textarea>
            <span v-if="errors.message" class="text-red-500 text-sm">{{ errors.message }}</span>
          </div>

          <!-- Submit Button -->
          <button
            type="submit"
            :disabled="isSubmitting"
            class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition relative"
          >
            <span
              v-if="isSubmitting"
              class="loader absolute left-4 top-3 w-5 h-5 border-2 border-t-transparent border-white rounded-full animate-spin"
            ></span>
            Submit
          </button>
        </form>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-4 mt-12 shadow-md">
      <div class="container mx-auto text-center">
        <p>&copy; 2024 Sri Lanka Postal Service. All rights reserved.</p>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        message: "",
      },
      errors: {
        name: null,
        email: null,
        message: null,
      },
      isSubmitting: false,
    };
  },
  methods: {
    validateForm() {
      this.errors = { name: null, email: null, message: null };
      let isValid = true;

      if (!this.form.name.trim()) {
        this.errors.name = "Please provide your name.";
        isValid = false;
      }

      if (!this.form.email.trim()) {
        this.errors.email = "Please provide your email.";
        isValid = false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email)) {
        this.errors.email = "Enter a valid email.";
        isValid = false;
      }

      if (!this.form.message.trim()) {
        this.errors.message = "Message cannot be empty.";
        isValid = false;
      }

      return isValid;
    },
    async handleSubmit() {
      if (!this.validateForm()) return;

      this.isSubmitting = true;

      try {
        // Simulate form submission (replace with actual API request)
        await new Promise((resolve) => setTimeout(resolve, 2000));
        alert("Your message has been sent!");
        this.form = { name: "", email: "", message: "" }; // Reset form
      } catch (error) {
        alert("Something went wrong. Please try again later.");
      } finally {
        this.isSubmitting = false;
      }
    },
  },
};
</script>

<style scoped>
.loader {
  border-top-color: transparent;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}
</style>