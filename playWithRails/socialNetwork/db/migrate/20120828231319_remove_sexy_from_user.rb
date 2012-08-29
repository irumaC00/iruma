class RemoveSexyFromUser < ActiveRecord::Migration
  def up
    remove_column :users, :sexy
      end

  def down
    add_column :users, :sexy, :boolean, default: false
  end
end
