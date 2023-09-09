import React, { Component } from 'react';

class SignUp extends Component {
  render() {
    return (
      <div className="auth-container">
        <h1>Sign Up</h1>
        <form>
          <label>
            Nombre:
            <input type="text" placeholder="Nombre" />
          </label>
          <label>
            Email:
            <input type="email" placeholder="Email" />
          </label>
          <label>
            Contraseña:
            <input type="password" placeholder="Contraseña" />
          </label>
          <button type="submit">Registrarse</button>
        </form>
      </div>
    );
  }
}

export default SignUp;