/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from 'react'
import axios from "axios";
import { Link } from "react-router-dom";
 
const ProductList = () => {
    const [products, setProducts] = useState([]);
 
    useEffect(() => {
        getProducts();
    },[]);

    const getProducts = async () => {
        const products = await axios.get('http://localhost:8080/produtcs');
        setProducts(products.data.allproducts);
    }
 
    const deleteProduct = async (id) =>{
        await axios.delete(`http://localhost:8080/products/${id}`);
        getProducts();
    }
    console.log(getProducts)
    return (
        <div>
            <Link to="/add" className="button is-primary mt-5">Add New</Link>
            <table className="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>product Id</th>
                        <th>Product Name</th>
                        <th>Product Details</th>
                        <th>Product Price</th>
                        <th>Product image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    { products.map((product,index) => (
                        <tr key={product.id}>
                              <td>{product.id}</td>
                            <td>{product.product_name}</td>
                            <td>{product.product_details}</td>
                            <td>{product.product_price}</td>
                          
                            <td>
                                {/* {product.product_img} */}
                             <img  src={`http://localhost:8080/${product.product_img}`} width ={'50px'} />
                            </td>
                            <td>
                                <Link to={`/edit/${product.id}`} className="button is-small is-info">Edit</Link>
                                <button onClick={() => deleteProduct(product.id)} className="button is-small is-danger">Delete</button>
                            </td>
                        </tr>
                    )) }
                     
                </tbody>
            </table>
        </div>
    )
}
 
export default ProductList