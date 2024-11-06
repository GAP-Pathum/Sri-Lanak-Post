<template>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
      <form @submit.prevent="submit">
        <div class="mb-4">
          <label class="block text-gray-700">Username</label>
          <input v-model="form.username" type="text" placeholder="Enter username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700">Password</label>
          <input v-model="form.password" type="password" placeholder="Enter password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
        </div>
        <button type="submit" class="w-full bg-indigo-500 text-white font-bold py-2 rounded-lg hover:bg-indigo-600">
          Login
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
      password: ''
    })

    const submit = () => {
      form.post('/login')
    }

    return { form, submit }
  }
}
</script>