import { Link } from '@inertiajs/react';
import '../../../css/product.css';

export default function Index({ products }) {

    return (
        <div className="product-container">
            <h1 className="product-title">Product Index</h1>
            <div className="product-grid">
                {products.map((product) => (
                    <div key={product.id} className="product-item ">
                        <img src={product.img} alt="" style={{ display: 'block', margin: '0 auto', borderRadius: '8px' }} />
                        <Link href={`/product/${product.id}`} className="product-link ">
                            {product.name} - ${product.price}
                        </Link>
                        <p className="product-description">{product.description}</p>
                        <Link href={`/product/${product.id}`} className="product-button">Select</Link>
                    </div>
                ))}
            </div>
        </div>
    );
}