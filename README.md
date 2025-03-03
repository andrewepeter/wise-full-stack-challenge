## Getting Started

To get the project up and running locally, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone <repository-url>
    cd <project-directory>
    ```

2. **Install the backend dependencies**:
    - Navigate to the project root (where `composer.json` is located) and run:
      ```bash
      composer install
      ```

3. **Install the frontend dependencies**:
    - In the same directory run:
      ```bash
      npm install
      ```

4. **Run the backend server**:
    - Open a terminal in the project root and run:
      ```bash
      php -d variables_order=GPCS artisan serve
      ```

5. **Run the frontend server**:
    - Open a second terminal and run:
      ```bash
      npm run dev
      ```

6. **Access the application**:
    - Open your browser and go to:
      ```
      http://127.0.0.1:8000
      ```

The application should now be running locally!
