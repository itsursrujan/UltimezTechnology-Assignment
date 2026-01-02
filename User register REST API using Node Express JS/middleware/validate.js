module.exports=(req,res,next)=>{
  if(req.body.password!==req.body.confirmPassword){
    return res.status(400).json({message:"Passwords do not match"});
  }
  next();
};