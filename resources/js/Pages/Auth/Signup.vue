<template>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
      <form @submit.prevent="submit">
        <div class="mb-4">
          <label class="block text-gray-700">Username</label>
          <input v-model="form.username" type="text" placeholder="Enter username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Email</label>
          <input v-model="form.email" type="email" placeholder="Enter email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700">Password</label>
          <input v-model="form.password" type="password" placeholder="Enter password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700">Confirm Password</label>
          <input v-model="form.password_confirmation" type="password" placeholder="Confirm password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        <button type="submit" class="w-full bg-indigo-500 text-white font-bold py-2 rounded-lg hover:bg-indigo-600">
          Sign Up
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
  setup() {
    const form = useForm({
      username: '',
      email: '',
      password: '',
      password_confirmation: ''
    })

    const submit = () => {
      form.post('/register')
    }

    return { form, submit }
  }
}
</script>