# A sample Guardfile
# More info at https://github.com/guard/guard#readme

## Uncomment and set this to only include directories you want to watch
# directories %(app lib config test spec feature)

## Uncomment to clear the screen before every task
# clearing :on

# Guard::Compass
#
# You don't need to configure watchers for guard 'compass' declaration as they generated
# from your Compass configuration file. You might need to define the Compass working directory
# and point to the configuration file depending of your project structure.
#
# Available options:
#
# * working_directory: Define the Compass working directory, relative to the Guardfile directory
# * configuration_file: Path to the Compass configuration file, relative to :project_path
#
# Like usual, the Compass configuration path are relative to the :project_path

# guard 'compass', project_path: 'not_current_dir', configuration_file: 'path/to/my/compass_config.rb'

group :development do
	guard :livereload do
		watch(%r{.+\.(css|js|html?|php|inc|theme)$})
	end

	if File.exists?("./config.rb")
		# Compile on start.
		puts `compass compile --time --quiet`
		guard :compass do
		watch(%r{(.*)\.s[ac]ss$})
		end
	end
end