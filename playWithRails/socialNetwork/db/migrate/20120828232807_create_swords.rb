class CreateSwords < ActiveRecord::Migration
  def change
    create_table :swords do |t|
      t.integer :user_id
      t.string :type
      t.string :status

      t.timestamps
    end
    add_index :user_id
  end
end
