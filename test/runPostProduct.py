import pandas as pd
import json

def convert_csv_to_newman_collection(csv_file, output_file):
    # Đọc dữ liệu từ tệp CSV bằng pandas
    df = pd.read_csv(csv_file)

    # Tạo danh sách các yêu cầu trong tệp JSON Collection
    collection = {
        "info": {
            "_postman_id": "",
            "name": "CSV to Newman Collection",
            "description": "",
            "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
        },
        "item": []
    }

    # Lặp qua từng hàng trong tệp CSV và tạo yêu cầu tương ứng
    for _, row in df.iterrows():
        name = row['Name']
        price = str(row['Price'])
        description = row['Description']
        image = row['Image']
        cpu = row['CPU']
        ram = row['RAM']
        storage = row['Storage']
        graphic_card = row['Graphic Card']
        display = row['Display']

        # Tạo yêu cầu cho mỗi hàng
        request_item = {
            "name": name,
            "request": {
                "url": "http://localhost/websites-nhom1/api/postProduct.php",
                "method": "POST",
                "header": [
                    {
                        "key": "Content-Type",
                        "value": "application/json"
                    }
                ],
                "body": {
                    "mode": "raw",
                    "raw": json.dumps({
                        "name": name,
                        "price": price,
                        "description": description,
                        "image": image,
                        "cpu": cpu,
                        "ram": ram,
                        "storage": storage,
                        "graphic_card": graphic_card,
                        "display": display
                    })
                },
                "description": "Insert a product"
            }
        }

        # Thêm yêu cầu vào danh sách các yêu cầu trong tệp JSON Collection
        collection["item"].append(request_item)

    # Ghi tệp JSON Collection
    with open(output_file, 'w') as f:
        json.dump(collection, f, indent=4)

# Sử dụng hàm để chuyển đổi tệp CSV thành tệp JSON Collection
csv_file = 'testdata/postProductData.csv'
output_file = 'testCollection.json'
convert_csv_to_newman_collection(csv_file, output_file)

