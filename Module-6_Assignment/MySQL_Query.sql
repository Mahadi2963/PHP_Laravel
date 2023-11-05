-- Query-1 :

SELECT
    c.customer_id,
    c.name AS customer_name,
    c.email,
    c.location,
    COUNT(o.order_id) AS total_orders
FROM Customers c
    LEFT JOIN Orders o ON c.customer_id = o.customer_id
GROUP BY c.customer_id
ORDER BY total_orders DESC;

-- Query-2 :

SELECT
    o.order_id,
    p.name AS product_name,
    oi.quantity, (oi.quantity * oi.unit_price) AS total_amount
FROM Orders o
    JOIN Order_Items oi ON o.order_id = oi.order_id
    JOIN Products p ON oi.product_id = p.product_id
ORDER BY o.order_id ASC;

-- Query-3 :

SELECT
    c.name AS category_name,
    SUM(oi.quantity * oi.unit_price) AS total_revenue
FROM Categories c
    LEFT JOIN Products p ON c.category_id = p.category_id
    LEFT JOIN Order_Items oi ON p.product_id = oi.product_id
GROUP BY c.name
ORDER BY total_revenue DESC;

-- Query-3 :

SELECT
    c.name AS customer_name,
    SUM(o.total_amount) AS total_purchase_amount
FROM Customers c
    LEFT JOIN Orders o ON c.customer_id = o.customer_id
GROUP BY c.customer_id
ORDER BY
    total_purchase_amount DESC
LIMIT 5;