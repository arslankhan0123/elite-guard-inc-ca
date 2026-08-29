import re
import os

file_path = r'd:\LaragonProjects\bexon\index-2.html'

if not os.path.exists(file_path):
    print(f"Error: {file_path} not found")
    exit(1)

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Pattern to match src="assets/ or src="./assets/ inside img tags
# Handle both single and double quotes
pattern = re.compile(r'(<img[^>]+src=["\'])(\.?/?)assets/')
replacement = r'\1https://themejunction.net/html/bexon/demo/assets/'

new_content = pattern.sub(replacement, content)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(new_content)

print(f"Successfully updated {file_path}")
