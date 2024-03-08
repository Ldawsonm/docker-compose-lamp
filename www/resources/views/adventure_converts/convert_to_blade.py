from bs4 import BeautifulSoup
import os

def update_asset_paths(html_content):
    soup = BeautifulSoup(html_content, 'html.parser')

    # Update CSS links
    for link in soup.find_all('link', {'rel': 'stylesheet'}):
        if 'href' in link.attrs:
            link['href'] = "{{ asset('" + link['href'] + "') }}"

    # Update JS script tags
    for script in soup.find_all('script'):
        if 'src' in script.attrs:
            script['src'] = "{{ asset('" + script['src'] + "') }}"

    # Update image sources
    for img in soup.find_all('img'):
        if 'src' in img.attrs:
            img['src'] = "{{ asset('" + img['src'] + "') }}"

    return str(soup)

def process_files(file_list):
    for file_path in file_list:
        if os.path.exists(file_path):
            with open(file_path, 'r', encoding='utf-8') as file:
                content = file.read()

            updated_content = update_asset_paths(content)

            with open(file_path, 'w', encoding='utf-8') as file:
                file.write(updated_content)
            print(f"Processed {file_path}")
        else:
            print(f"File does not exist or is not an HTML file: {file_path}")

# Example usage
file_list = ['adventure1.blade.php', 'adventure2.blade.php', 'adventure3.blade.php', 'adventure4.blade.php', 'home.blade.php']  # Add your file paths here
process_files(file_list)
