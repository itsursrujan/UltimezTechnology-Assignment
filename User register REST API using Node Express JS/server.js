const express = require("express");
const dotenv = require("dotenv");
const connectDB = require("./config/db");
const path = require("path");

dotenv.config();
connectDB();

const app = express();
app.use(express.json());
app.use(express.static("public"));

app.use("/api/auth", require("./routes/authRoutes"));

app.get("/", (req,res)=>{
  res.sendFile(path.join(__dirname,"public","index.html"));
});

const PORT = process.env.PORT || 5000;
app.listen(PORT,()=>console.log("Server running on "+PORT));