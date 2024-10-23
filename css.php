body {
    font-family: 'Epilogue', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
}

.section {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-content {
    background-color: #f7f7f7;
    padding: 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 350px; /* Tamaño más compacto */
}

.form-input {
    margin-bottom: 1rem;
}

.form-input input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
}

.auth-button {
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
    background-color: #007bff; /* Color del botón */
    color: white;
    border: none;
    border-radius: 0.25rem;
    cursor: pointer;
}

.auth-button:hover {
    background-color: #0056b3; /* Efecto hover */
}

.reset-button {
    padding: 0.75rem 1rem;
    font-size: 0.875rem;
    background-color: #ccc; /* Color del botón de reiniciar */
    border: none;
    border-radius: 0.25rem;
    cursor: pointer;
}

.reset-button:hover {
    background-color: #bbb; /* Efecto hover */
}
