import os
from PIL import Image

def crop_transparent(image):
    if image.mode != 'RGBA':
        image = image.convert('RGBA')
    bbox = image.getbbox()
    if bbox:
        return image.crop(bbox)
    return image

def process_images_in_folder(folder):
    for root, _, files in os.walk(folder):
        for file in files:
            if file.lower().endswith('.webp'):
                path = os.path.join(root, file)
                print(f"Processing {path}")
                img = Image.open(path)
                cropped = crop_transparent(img)
                cropped.save(path)

# Run it on the 'logos' folder
process_images_in_folder("logos")
