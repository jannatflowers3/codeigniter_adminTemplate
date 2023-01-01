import { BrowserRouter, Route, Routes,  } from "react-router-dom";
import ProductList from "./components/ProductList";

 
function App() {
  return <> (
    <BrowserRouter>
  
        <Routes>
            <Route  path="/" element={<ProductList />}/>   
        
         
        
        </Routes>
     
    </BrowserRouter>
  );
  </>
}
 
export default App;