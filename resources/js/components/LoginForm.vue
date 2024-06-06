<template>
  <div class="login-form">
    <form @submit.prevent="submitForm">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" v-model="email" class="form-control" id="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" v-model="password" class="form-control" id="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await axios.post('/login', {
          email: this.email,
          password: this.password
        });

        if (response.data.redirect) {
          window.location.href = response.data.redirect;
        }
      } catch (error) {
        console.error(error);
        alert('Login failed.');
      }
    }
  }
};
</script>
