import { Link } from '@inertiajs/react'; 
import '../../../css/product-show.css';

export default function Show({ product }) { 
    return ( 
        <div className="product-show-container">
            <img src={product.img} alt="" style={{ display: 'block', margin: '0 auto', borderRadius: '8px' }}/>
            <h1 className="product-show-title">{product.name}</h1> 
            <p className="product-show-description">{product.description}</p> 
            <p className="product-show-price">Price: ${product.price}</p> 
            <div className="product-show-actions">
                <Link href="/product" className="product-show-link">Back to All Products</Link> 
                <Link href={`/product/${product.id}`} className="product-show-button">Select</Link>
            </div>
        </div> 
    ); 
}