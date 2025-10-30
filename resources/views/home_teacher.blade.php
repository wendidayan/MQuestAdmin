<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Dashboard</title>
   <link rel="stylesheet" href="{{ asset('assets/css/home_teacher_style.css') }}">
</head>
<body>
  <div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">M<span>Quest</span></h2>
      <p class="subtitle">A Matatag E-learning Application</p>
      <nav>
        <ul>
          <li class="active">📚 Classes</li>
          <li>👩‍🎓 Students</li>
          <li>📖 Subjects</li>
          <li>📈 Progress</li>
          <li>🔔 Notifications</li>
          <li>⚙️ Settings</li>
          <li class="danger" onclick="handleLogout()" >🚪 Logout</li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Header -->
      <header class="header">
        <h1>Dashboard</h1>
        <div class="profile">
          <img class="avatar" src="https://api.dicebear.com/9.x/bottts-neutral/png?seed=Admin" alt="Admin Avatar">
          <div class="profile-info">
            <span id="user-email" class="teacher-email">Loading...</span>
            <span class="role">Teacher</span>
          </div>
        </div>
      </header>

      <!-- Cards -->
      <section class="cards">
        <div class="card">
          <h3>120</h3>
          <p>Total Students</p>
        </div>
        <div class="card">
          <h3>6</h3>
          <p>Classes</p>
        </div>
        <div class="card">
          <h3>87%</h3>
          <p>Average Progress</p>
        </div>
      </section>

      <!-- Table -->
      <section class="student-section">
        <h2>Student List</h2>
        <table class="student-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Class</th>
              <th>Progress</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Maria Lopez</td>
              <td>Math 101</td>
              <td>92%</td>
              <td><span class="status good">On Track</span></td>
            </tr>
            <tr>
              <td>Juan Cruz</td>
              <td>Science 201</td>
              <td>68%</td>
              <td><span class="status warning">Needs Support</span></td>
            </tr>
            <tr>
              <td>Ana Reyes</td>
              <td>English 301</td>
              <td>80%</td>
              <td><span class="status good">On Track</span></td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
   <script src="./userside_backend/user.js"></script>
    <script>

      // Load user info on page load
      document.addEventListener("DOMContentLoaded", () => {
        const userRaw = localStorage.getItem("user");
        const token = localStorage.getItem("token");

        let user = null;
        try {
          user = userRaw ? JSON.parse(userRaw) : null;
        } catch (e) {
          console.error("❌ Failed to parse user JSON:", e);
        }

        console.log("🔑 Stored token:", token);
        console.log("👤 Stored user object:", user);

        if (user?.email) {
          document.getElementById("user-email").textContent = user.email;
        }
      });

      async function handleLogout() {
        try {
          const token = localStorage.getItem('token');
          const userRaw = localStorage.getItem('user');
          const user = userRaw ? JSON.parse(userRaw) : null;
          const server_id = user?.server_id || null;

          if (!token || !server_id) {
            alert("Missing credentials. Cannot logout.");
            return;
          }

          // pass token + server_id to logout
          const success = await logout(token, server_id);

          if (success) {
            localStorage.removeItem("token");
            localStorage.removeItem("user");
            window.location.href = "index.html"; // Redirect to login
          } else {
            alert("Logout failed. Try again.");
          }
        } catch (err) {
          console.error("handleLogout error:", err);
          alert("Logout failed. Try again.");
        }
      }
    </script>
</body>
</html>
