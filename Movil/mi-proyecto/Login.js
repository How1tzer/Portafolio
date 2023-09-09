import React, { Component } from 'react';

class Login extends Component {
  render() {
    return (
      <div className="auth-container">
        <h1>Login</h1>
        <form>
          <label>
            Email:
            <input type="email" placeholder="Email" />
          </label>
          <label>
            Contraseña:
            <input type="password" placeholder="Contraseña" />
          </label>
          <button type="submit">Iniciar Sesión</button>
        </form>
      </div>
    );
  }
}

export default Login;