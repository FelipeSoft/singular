import { HomeRepository } from "../../domain/repositories/HomeRepository";
import { pool } from "./Connection";

export class HomeRepositoryMySQL implements HomeRepository {
    public async create(): Promise<void> {
        const query = "YOUR SQL HERE"
        try  {
            const [result, fields] = await pool.execute(query, [])
        } catch (error) {
            await pool.rollback()
        } finally {
            await pool.end()
        }
    }
}