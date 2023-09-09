import React, { Component } from 'react';

class ForgotPassword extends Component {
  render() {
    return (
      <div className="auth-container">
        <h1>Forgot Password</h1>
        <p>Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
        <form>
          <label>
            Email:
            <input type="email" placeholder="Email" />
          </label>
          <button type="submit">Enviar enlace</button>
        </form>
      </div>
    );
  }
}

export default ForgotPassword;